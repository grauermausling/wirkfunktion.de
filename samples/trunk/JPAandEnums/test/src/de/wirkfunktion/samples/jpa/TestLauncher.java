/* 
JPAandEnums
Copyright (C) 2011  Alexander Schmitt

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
package de.wirkfunktion.samples.jpa;

import java.util.Date;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;

import de.wirkfunktion.samples.jpa.domain.Gender;
import de.wirkfunktion.samples.jpa.domain.Person;


public class TestLauncher {

  public static void main(final String[] args) {
    new TestLauncher().test();
  }

  private EntityManagerFactory emf;

  public <T> void createEntity(final T entity) {
    final EntityManager em = this.emf.createEntityManager();
    final EntityTransaction tx = em.getTransaction();
    try {
      tx.begin();
      em.persist(entity);
      tx.commit();
    } catch (final RuntimeException e) {
      if (tx != null && tx.isActive()) tx.rollback();
      throw e;
    } finally {
      em.close();
    }
  }

  public <T> T readEntity(final Class<T> clazz, final Object id) {
    final EntityManager em = this.emf.createEntityManager();
    try {
      return em.find(clazz, id);
    } finally {
      em.close();
    }
  }

  void test() {
    this.emf = Persistence.createEntityManagerFactory("JpaPU");
    try {
      final Person willy = new Person("Willy", new Date(), Gender.MALE);

      createEntity(willy);
      final Object id = willy.getId();
      
      System.out.println("\nJPA Entity: " + readEntity(Person.class, id));
    } finally {
      if (this.emf != null) this.emf.close();
    }
  }
}

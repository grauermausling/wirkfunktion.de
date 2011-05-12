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
    } catch (final RuntimeException ex) {
      if (tx != null && tx.isActive()) tx.rollback();
      throw ex;
    } finally {
      em.close();
    }
  }

  public <T> T readEntity(final Class<T> clss, final Object id) {
    final EntityManager em = this.emf.createEntityManager();
    try {
      return em.find(clss, id);
    } finally {
      em.close();
    }
  }

  void test() {
    this.emf = Persistence.createEntityManagerFactory("JpaPU");
    try {
      final Person mann = new Person("Willy", new Date(), Gender.MALE);

      createEntity(mann);
      final Object id = mann.getId();

      System.out.println("\nJPA Entity: " + readEntity(Person.class, id) + " ---\n");
    } finally {
      if (this.emf != null) this.emf.close();
    }
  }
}

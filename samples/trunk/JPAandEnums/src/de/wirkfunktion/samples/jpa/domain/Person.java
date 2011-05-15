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
package de.wirkfunktion.samples.jpa.domain;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Transient;

@Entity
public class Person implements Serializable {

  private static final long serialVersionUID = 1L;

  private long id;
  private String name;
  private Date birthday;
  private String genderSymbol;

  public Person() {
    super();
  }

  public Person(final String name, final Date birthday, final Gender gender) {
    super();
    this.name = name;
    this.birthday = birthday;
    this.genderSymbol = gender.toString();
  }

  public Date getBirthday() {
    return this.birthday;
  }

  @Transient
  public Gender getGender() {
    return Gender.fromString(getGenderSymbol());
  }

  @Id
  @GeneratedValue(strategy = GenerationType.AUTO)
  public long getId() {
    return this.id;
  }

  public String getName() {
    return this.name;
  }

  public void setBirthday(final Date birthday) {
    this.birthday = birthday;
  }

  public void setGender(final Gender gender) {
    setGenderSymbol(gender.toString());
  }

  public void setId(final long id) {
    this.id = id;
  }

  public void setName(final String name) {
    this.name = name;
  }

  @Override
  public String toString() {
    return "Person [id=" + getId() + ", name=" + getName() + ", birthday=" + getBirthday()
        + ", gender=" + getGender() + "]";
  }

  @Column(name = "GENDER")
  protected String getGenderSymbol() {
    return this.genderSymbol;
  }

  protected void setGenderSymbol(final String genderSymbol) {
    this.genderSymbol = genderSymbol;
  }
}

package de.wirkfunktion.samples.jpa.domain;

import java.io.Serializable;
import java.util.Date;

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
  private String gender;

  public Person() {
    super();
  }

  public Person(final String name, final Date birthday, final Gender gender) {
    super();
    this.name = name;
    this.birthday = birthday;
    this.gender = gender.toString();
  }

  public Date getBirthday() {
    return this.birthday;
  }

  @Transient
  public Gender getGender() {
    return Gender.fromString(getGenderData());
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
    setGenderData(gender.toString());
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

  protected String getGenderData() {
    return this.gender;
  }

  protected void setGenderData(final String string) {
    this.gender = string;
  }
}

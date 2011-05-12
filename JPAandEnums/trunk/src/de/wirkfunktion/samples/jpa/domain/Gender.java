package de.wirkfunktion.samples.jpa.domain;

import java.util.HashMap;
import java.util.Map;

public enum Gender {

  MALE("M"), FEMALE("F");

  private static final Map<String, Gender> stringToEnum = new HashMap<String, Gender>();
  static {
    for (final Gender gender : values())
      stringToEnum.put(gender.toString(), gender);
  }

  /**
   * Returns gender from given string, or null if given string is not valid
   * 
   * @param genderSymbol
   *          String representation of Gender
   * @return Gender or null if given string is invalid
   */
  public static Gender fromString(final String genderSymbol) {
    return stringToEnum.get(genderSymbol);
  }

  private String gender;

  private Gender(final String gender) {
    this.gender = gender;
  }

  /*
   * (non-Javadoc)
   * 
   * @see java.lang.Enum#toString()
   */
  @Override
  public String toString() {
    return this.gender;
  }
}

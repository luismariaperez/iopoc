Feature: User creation
  In order to operate with a portfolio
  As a customer
  I want to create a user

  Scenario: Create the user
    Given I send a "POST" request to "/user" with body:
    """
    {
      "id": "0b7221c8-a62c-40c1-a7d3-a8fdbca2e1a8",
      "email": "test@behat.com",
      "password": "foo"
    }
    """
    Then the response status code should be 201
    And the response should be empty
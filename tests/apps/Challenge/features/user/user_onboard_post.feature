Feature: User onboarding
  In order to get my portfolios
  As a customer
  I want to get a list of them by my identificator

  Scenario: Get a list of portfolios
    Given I send a "POST" request to "/user/onboard" with body:
    """
    {
      "id": "0b7221c8-a62c-40c1-a7d3-a8fdbca2e1a8",
      "email": "test@behat.com"
    }
    """
    Then the response status code should be 201
    And the response should contain "0b7221c8-a62c-40c1-a7d3-a8fdbca2e1a8"
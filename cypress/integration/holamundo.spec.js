/// <references types="cypress" />

describe('Envia un Hola Mundo', () =>{
    it('Prueba el Header de la página principal', () =>{
        cy.visit('/')

        document.querySelector('h1').textContent

        cy.get('h1')

    });
});
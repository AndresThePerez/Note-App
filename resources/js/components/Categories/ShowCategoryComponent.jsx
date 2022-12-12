import React from 'react'
import {Navbar, Nav, Container} from 'react-bootstrap'
import {LinkContainer} from 'react-router-bootstrap'

const ShowCategoryComponent = () => {
    return (
        <Navbar bg="light" expand="lg">
            <Container>
                <LinkContainer to="/">
                    <Navbar.Brand className="me-auto">Note Application</Navbar.Brand>
                </LinkContainer>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className='ms-auto'>
                        <LinkContainer to="/deleted">
                            <Nav.Link>Deleted Notes</Nav.Link>
                        </LinkContainer>
                    </Nav>
                </Navbar.Collapse>
            </Container>
        </Navbar>
    )
}

export default ShowCategoryComponent

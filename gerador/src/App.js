import React, { Component } from 'react'
import { Container, Row, Col, Button, Fade, Progress } from 'reactstrap'
import axios from 'axios'
import FacebookLogin from 'react-facebook-login/dist/facebook-login-render-props'
import './App.css'
const API = `http://localhost:8000/api`
class App extends Component {
  constructor(){
    super()
    this.state = {
      fadeIn: false,
      carregando: false,
      btText:'Gerar Imagem'
    }
  }
  gerar({name, picture}){
    console.log(picture);
    this.setState({
      carregando: true,
      fadeIn:false,
      btText:'Carregando...'
    })
    
    axios.post(`${API}/gerar`, {
      imagem: picture.data.url,
      name: name
    }).then(res => res.data)
      .then(data => {
        this.setState({
          image:data.imagem,
          carregando: false,
          btText: 'Gerar Imagem',
          fadeIn: true
        })
      })
      .catch(error => console.log(error))
    
  }
  render() {
    return (
      <Container>
        <Row>
          <Col>
          <Fade in={this.state.fadeIn} tag="div">
            <figure className="figure">
                <img src={this.state.image} id='imagem' className="figure-img img-fluid rounded" width="1200" height="630" alt="Resultado" />
                <figcaption className="figure-caption text-right">Imagem de resultado</figcaption>
            </figure>
          </Fade>
          {
            this.state.carregando &&
            <div>
              <h4 className='text-center'>Carregando...</h4>
            <Progress animated value="100" />
            </div>
          }
          </Col>
        </Row>
        <Row>
          <Col style={{marginTop:20}}>
          <FacebookLogin
          appId="1915973128693138"
          autoLoad={false}
          callback={this.gerar.bind(this)}
          fields="name,picture.height(500)"
          render={renderProps => (
            <Button onClick={() => {
              this.setState({
                btText: 'Logando com o Facebook...'
              })
              renderProps.onClick()
            }} style={{cursor: 'pointer'}} color='success' size='lg' block>{this.state.btText}</Button>
          )}
        />
           
          </Col>
        </Row>
      </Container>
    )
  }
}

export default App

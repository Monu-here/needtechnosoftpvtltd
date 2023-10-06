import logo from './logo.svg';
import Navbar from './components/Navbar';
import Home from './components/Home';
import Feature from './components/Feature';
import Team from './components/Team';
import Service from './components/Services';
import Contact from './components/Contact';
import Review from './components/Review';
import Footer from './components/Footer';
import './App.css';



function App() {
  return (
    <>
    <div className="sticky-top">
      <Navbar/>
    </div>
    <div className="main">
      <Home/>
      <Feature/>
      <Team/>
      <Review/>
      <Service/>
      <Contact/>
      <Footer/>
    </div>
    </>
  );
}

export default App;

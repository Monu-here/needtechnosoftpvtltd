import React from "react";
function Navbar() {
  return (
    <div>
      <div className="up">
        <div className="container">
          <div className="logo">NeedTechnoSoft</div>
          <nav className="navbar">
            <a className="active nav-link" href="#home">
              HOME
            </a>
            <a className="nav-link" href="#feature">
              FEATURES
            </a>
            <a className="nav-link" href="#team">
              TEAM
            </a>
            <a className="nav-link" href="#service">
              SERVICE
            </a>
            <a className="nav-link" href="#contact">
              CONTACT
            </a>
          </nav>
        </div>
      </div>
    </div>
  );
}
export default Navbar;

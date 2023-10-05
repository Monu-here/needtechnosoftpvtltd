import React, { useEffect, useState } from "react";
import { getData, getIMGURL, listService } from "../utils/routes";

function Service() {
  const [serviceData, setServiceData] = useState([]);
  useEffect(() => {
    getData(listService)
      .then((data) => {
        setServiceData(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);
  return (
    <div>
      <section id="service">
        <div className="services">
          <div className="title">OUR SERVICES</div>
          <div className="text">
            We Provide Services To Our Valuable Clients In Efficient And Cheaper
            Means With Support And 24/7 Availability
          </div>
          <div className="service-holder">
            <div className="row me-0">
              {serviceData.map((element, index) => (
                <div className="col-md-4">
                  <div className="serviceimage-holder">
                    <img src={getIMGURL(element.image)} />
                    <div className="serv">
                      <p className="title">{element.name}</p>
                      <p className="text">{element.sub_short_desc}</p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Service;

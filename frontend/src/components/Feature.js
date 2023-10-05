import React, { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faMobile } from "@fortawesome/free-solid-svg-icons";
import { faGem } from "@fortawesome/free-solid-svg-icons";
import { faWrench } from "@fortawesome/free-solid-svg-icons";
import { getData, getIMGURL, listFeature } from "../utils/routes";

function Feature() {
  const [listDatas, setListDatas] = useState([]);
  useEffect(() => {
    getData(listFeature)
      .then((data) => {
        setListDatas(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  return (
    <section id="feature">
      <div className="features">
        <p className="text1"></p>
        <p className="text2"></p>
        <div className="box-holder">
          <div className="row me-0">
            {listDatas.map((element, index) => (
              <div className="col-md-4" key={element.id}>
                <div className="box">
                  <div className="icon">
                    <img src={getIMGURL(element.image)} width={"20%"} />
                  </div>
                  <p className="title">{element.sub_title}</p>
                  <p className="text">{element.sub_short_desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}
export default Feature;

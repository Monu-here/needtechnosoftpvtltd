import React, { useEffect, useState } from "react";
import { Carousel } from "react-responsive-carousel";
import "react-responsive-carousel/lib/styles/carousel.min.css";
import { ListTestmonial, getData, getIMGURL } from "../utils/routes";

function Review() {
  const [listData, setListDatas] = useState([]);

  useEffect(() => {
    getData(ListTestmonial)
      .then((data) => {
        setListDatas(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);

  return (
    <div className="review">
      <Carousel showArrows={true} showIndicators={false}>
        {listData.map((element, index) => (
          <div key={index}>
            <div className="reviews">
              <img src={getIMGURL(element.image)} />
              <div className="text">
                <div className="view">
                  {element.short_desc}
                </div>
                <div className="name">{element.name}</div>
                <div className="job">{element.position}</div>
              </div>
            </div>
          </div>
        ))}
      </Carousel>
    </div>
  );
}
export default Review;

import React, { useState } from "react";
import { Carousel } from "react-responsive-carousel";
import "react-responsive-carousel/lib/styles/carousel.min.css";
function Review() {
  // const [listDatas, setListDatas] = useState([]);
  // useEffect(() => {
  //   getData(listFeature)
  //     .then((data) => {
  //       setListDatas(data);
  //     })
  //     .catch((err) => {
  //       console.log(err);
  //     });
  // }, []);
  return (
    <div className="review">
      <Carousel showArrows={true} showIndicators={false}>
        <div>
          <div className="reviews">
            <img src="../../images/anup.jpg" />
            <div className="text">
              <div className="view">
                "Your company is truly upstanding and is behind its product 100
                percent. Hestia is worth much more than I paid. I like Hestia
                more each day because it makes easier."
              </div>
              <div className="name">Anup Bhattarai</div>
              <div className="job">INDEPENDENT ARTIST</div>
            </div>
          </div>
        </div>
        <div>
          <div className="reviews">
            <img src="../../images/bisnu.png" />
            <div className="text">
              <div className="view">
                "Thank you for making it painless, pleasant and most of all
                hassle free! I am so pleased with this product. Dude, your stuff
                is great! I will refer everyone I know."
              </div>
              <div className="name">Bishnu Bhurtel</div>
              <div className="job">FREELANCER</div>
            </div>
          </div>
        </div>
        <div>
          <div className="reviews">
            <img src="../../images/abhijal.jpg" />
            <div className="text">
              <div className="view">
                "They have been very helpful and friendly when i was in need of
                websites , my working area needs lots of knowledge and platform
                regarding to technology and they have fulfilled it."
              </div>
              <div className="name">Abijal Bista</div>
              <div className="job">MEDIA PERSON</div>
            </div>
          </div>
        </div>
        <div>
          <div className="reviews">
            <img src="../../images/prem.jpg" />
            <div className="text">
              <div className="view">
                "We have no regrets! After using your product my business
                skyrocketed! I made back the purchase price in just 48 hours! I
                couldn't have asked for more than this."
              </div>
              <div className="name">Prem Rai</div>
              <div className="job">BUSINESS MAN</div>
            </div>
          </div>
        </div>
      </Carousel>
    </div>
  );
}

export default Review;

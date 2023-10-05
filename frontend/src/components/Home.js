import axios from "axios";
import React, { useEffect, useState } from "react";
import { getIMGURL, listRoute } from "../utils/routes";

function Home() {
  const [listDatas, setListDatas] = useState([]);
  useEffect(() => {
    try {
      async function fetch() {
        const { data } = await axios.get(`http://127.0.0.1:8000/api/list`);

        setListDatas(data);
      }
      fetch();
    } catch (error) {
      console.log(error);
    }
  }, []);

  return (
    <>
      {listDatas.map((ele, i) => (
        <section
          id="home"
          style={{
            backgroundImage: `linear-gradient(
              180deg,
              rgba(13, 13, 13, 0.916),
              rgba(7, 7, 7, 0.779)
            ), url(${getIMGURL(ele.image)})`,
          }}
          key={ele.id}
        >
          <div className="header">
            <div className="text">
              <p className="text1">{ele.title}</p>
              <p className="text2">{ele.short_desc}</p>
            </div>
          </div>
        </section>
      ))}
    </>
  );
}
export default Home;

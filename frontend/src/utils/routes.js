import axios from "axios";

export const URL = "http://127.0.0.1:8000/";
export const apiURL = "http://127.0.0.1:8000/api";
export const listRoute = `${apiURL}/list`;
export const listFeature = `${apiURL}/feature/list`;
export const listTeam = `${apiURL}/team/list`;
export const listService = `${apiURL}/service/list`;
export const listContact = `${apiURL}/contact/list`;
export const postContact = `${apiURL}/add`;
export const getIMGURL = (path) => {
  return URL + path;
};

export const getData = (url, default_data) => {
  return new Promise((resolve, reject) => {
    axios
      .get(url)
      .then((res) => {
        resolve(res.data);
      })
      .catch((err) => {
        if (default_data) {
          resolve(default_data);
        } else {
          reject(err);
        }
      });
  });
};

const axios = require('axios');

axios
  .get('http://localhost:8080/api/resumes/2', {
    headers: {
      Authorization: 'Bearer 1|abUvjfOhoxkkXHuaeA1mW01lxAvgAVlemUIYYmdI',
    },
  })
  .then((res) => {
    console.log(res.data);
  })
  .catch((e) => {
    console.log(e.response.status);
    console.log(e.response.data);
  });
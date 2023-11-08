

function getAlldata() {
    axios.get('/getAll').then(function(response){
       const humidity = response.data.humidity;
       const humiditys = document.getElementById('humidity');
       humiditys.textContent = humidity + '%';

       const temperature = response.data.temperature ;
       const temperatures = document.getElementById('temperature');
       temperatures.textContent = temperature + '°C';

       const light = response.data.light;
       const lights = document.getElementById('light');
       lights.textContent = light + 'Lx';

       const mist_status = response.data.mist_status;
       const mist_statust = document.getElementById('mist_status');
       mist_statust.textContent = mist_status;

       const lightoff = document.getElementById('lightoff');
       lightoff.textContent = light;

        const vent_status = response.data.vent_status;
        const vent_statust = document.getElementById('vent_status');
        vent_statust.textContent = vent_status;

    })
}
setInterval(getAlldata, 1000);

const divace_misk = document.getElementById('divace_misk')
const divace_vent = document.getElementById('divace_vent');
divace_misk.addEventListener('click', async function () {
    try {
      const isChecked = divace_misk.checked;
      if (isChecked) {
        const response = await axios.get('/starmist');
        console.log('on mist.');
      } else {
        const response = await axios.get('/stopmist');
        console.log('off mis.');
      }
    } catch (error) {
      console.error('An error occurred:', error);
    }
  });

  divace_vent.addEventListener('click', async function () {
    try {
      const isChecked = divace_vent.checked;
      if (isChecked) {
        const response = await axios.get('/starmist');
        console.log('Checkbox is checked, and Axios request for true condition was sent.');
      } else {
        const response = await axios.get('/stopmist');
        console.log('Checkbox is unchecked, and Axios request for false condition was sent.');
      }
    } catch (error) {
      console.error('An error occurred:', error);
    }
  });


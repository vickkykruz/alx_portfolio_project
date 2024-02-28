import './bootstrap';
import 'flowbite';
import Tagify from '@yaireo/tagify'
import axios from 'axios';

// Initialize other variables if needed
// const axios = require('axios');
let countryName;
let selectedCountries = {
    added: [],
    removed: []
};
let selectedStates = {
    added: [],
    removed: []
};
let selectedCities = {
    added: [],
    removed: []
};

let countries = document.querySelector('#countries');
let states = document.querySelector('#states');
let cities = document.querySelector('#cities');

function mount() {
    return getAccessToken()
        .then(authToken => {
            return getCountries(authToken);
        })
        .then(countries => {
            // Process the list of countries
            countryName = Object.values(countries).flatMap(country => country.country_name);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

async function getAccessToken() {
    try {
        const response = await axios.get('https://www.universal-tutorial.com/api/getaccesstoken', {
            headers: {
                'Accept': 'application/json',
                'api-token': 'WUMMoJAIsRVBr8S7-J13qo_M7ObGTZtM3AVxLV9CEY3CBpec_PIZXyk-FPucMx0_j_Q',
                'user-email': 'onwuegbuchulemvic02@gmail.com'
            }
        });
        return response.data.auth_token;
    } catch (error) {
        throw new Error('Error fetching access token: ' + error.message);
    }
}

async function getCountries(authToken) {
    try {
        const response = await axios.get('https://www.universal-tutorial.com/api/countries', {
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + authToken
            }
        });
        return response.data;
    } catch (error) {
        throw new Error('Error fetching countries: ' + error.message);
    }
}

// State Fetecher
const StateFetcher = {
    allStates: {},
    states: {},

    async getStates(authToken, selectedCountries) {
        try {
            for (const selectedCountry of selectedCountries) {
                const outputStates = await this.fetchStates(authToken, selectedCountry);
                this.allStates[selectedCountry] = outputStates;
            }
            this.states = this.allStates;
            return this.states; // Return the states object
        } catch (error) {
            console.error('Error fetching countries: ' + error.message);
            return {}; // Return an empty object in case of error
        }
    },

    async fetchStates(authToken, countryName) {
        try {
            const response = await axios.get(`https://www.universal-tutorial.com/api/states/${countryName}`, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + authToken
                }
            });
            this.handleResponseError(response);
            return response.data;
        } catch (error) {
            console.error('Error fetching states: ' + error.message);
            throw error;
        }
    },

    handleResponseError(response) {
        if (response.status !== 200) {
            throw new Error('Request failed with status: ' + response.status);
        }
    }
};

// An Object to fetch the cities
// State Fetecher
const CitiesFetcher = {
    allCities: {},
    cities: {},

    async getCities(authToken, selectedStates) {
        try {
            for (const selectedState of selectedStates) {
                const outputCities = await this.fetchCities(authToken, selectedState);
                this.allCities[selectedState] = outputCities;
            }
            this.cities = this.allCities;
            return this.cities; // Return the states object
        } catch (error) {
            console.error('Error fetching states: ' + error.message);
            return {}; // Return an empty object in case of error
        }
    },

    async fetchCities(authToken, stateName) {
        try {
            const response = await axios.get(`https://www.universal-tutorial.com/api/cities/${stateName}`, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + authToken
                }
            });
            this.handleResponseError(response);
            return response.data;
        } catch (error) {
            console.error('Error fetching cities: ' + error.message);
            throw error;
        }
    },

    handleResponseError(response) {
        if (response.status !== 200) {
            throw new Error('Request failed with status: ' + response.status);
        }
    }
};

// Check if the country has been loaded
// if (countryName && countryName.)
mount()
.then(async () => { // Wrap in async function
    let countriesTagify = new Tagify(countries, {
        whitelist: countryName,
        dropdown: {
            enabled: 0
        }
    });
    // Initialize statesTagify outside the event handler to make it accessible later
    let statesTagify;
    let citiesTagify;

    // Listen for Tagify events
    countriesTagify.on('add', async function(event) { // Add async here
        selectedCountries.added = countriesTagify.value.map(tag => tag.value);
        Livewire.emit('countriesAdded', selectedCountries.added); // Update the database at once
        // Fetch the states
        const getAuthToken = await getAccessToken(); // Await the promise
        const fetchedStates = await StateFetcher.getStates(getAuthToken, selectedCountries.added);
        // Convert the return object to a list
        const stateList = [];
        for (const country of Object.keys(fetchedStates)) {
            for (const stateObj of fetchedStates[country]) {
                stateList.push(stateObj.state_name);
            }
        }
        // Update whitelist of statesTagify if it's already initialized
        if (statesTagify) {
            statesTagify.settings.whitelist = stateList;
        }
    });

    countriesTagify.on('remove', async function(event) { // Add async here
        selectedCountries.removed = countriesTagify.value.map(tag => tag.value);
        Livewire.emit('countriesRemoved', selectedCountries.removed);
        // Fetch the states
        const getAuthToken = await getAccessToken(); // Await the promise
        const fetchedStates = await StateFetcher.getStates(getAuthToken, selectedCountries.removed);
        console.log('States Removed', fetchedStates);
    });

    // Initialize statesTagify when mount() is called
    statesTagify = new Tagify(states, {
        dropdown: {
            enabled: 0 // Enable dropdown
        },
        enforceWhitelist: true, // Enforce whitelist
    });

    // Listers for the State
    statesTagify.on('add', async function(event) {
        selectedStates.added = statesTagify.value.map(tag => tag.value);
        Livewire.emit('stateAdded', selectedStates.added); // Update the database at once
        // Fetch The cities
        const getAuthToken = await getAccessToken(); // Await the promise
        const fetchedCities = await CitiesFetcher.getCities(getAuthToken, selectedStates.added);
        const cityList = [];
        for (const state of Object.keys(fetchedCities)) {
            for (const cityObj of fetchedCities[state]) {
                cityList.push(cityObj.city_name);
            }
        }
        if (citiesTagify) {
            citiesTagify.settings.whitelist = cityList;
        }
    });

    // To Remove State
    statesTagify.on('remove', async function(event) {
        selectedStates.removed = statesTagify.value.map(tag => tag.value);
        Livewire.emit('stateRemoved', selectedStates.removed) // Update the database at once
    })

    // Cities
    citiesTagify = new Tagify(cities, {
        dropdown: {
            enabled: 0 // Enable dropdown
        },
        enforceWhitelist: true,
    });

    // City Listeners
    citiesTagify.on('add', async function(event) {
        selectedCities.added = citiesTagify.value.map(tag => tag.value);
        Livewire.emit('city Added', selectedCities.added);
        console.log('city Added', selectedCities.added);
    })

    citiesTagify.on('remove', async function(event) {
        selectedCities.removed = citiesTagify.value.map(tag => tag.value);
        Livewire.emit('city Removed', selectedCities.removed);
        console.log('city Removed', selectedCities.removed);
    })
})
.catch(error => {
    // Handle errors if any
    console.error('Error:', error);
});

window.addEventListener('countries-updated', function (event) {
    var countries = event.detail;
    console.log(countries); // Handle the updated countries data
});

// document.addEventListener('livewire:load', function() {
//     console.log('Livewire load listing to event')
// })


// Functionality for scrolling in navbar
window.addEventListener('scroll', function() {
    const navigation = document.querySelector('.navigation');
    if (navigation) {
        if (window.scrollY > 0) {
            navigation.classList.add('bg-white');
        } else {
            navigation.classList.remove('bg-white');
        }
    }
});

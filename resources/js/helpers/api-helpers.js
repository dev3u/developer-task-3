/**
 * Generic helper file for making api requests
 */

import axios from 'axios'

const get = () => {
    return axios.get
}

const post = () => {
    return axios.post
}

export const getUrl = async (url) => {
    return await get()(url)
}

export const postUrl = async (url, body) => {
    return await post()(url, body)
}

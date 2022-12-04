import axios from 'axios'
import { config } from '../config/config.js'

export const axiosInstance = axios.create({
  timeout: 5000,
  baseURL: config.server_url,
})

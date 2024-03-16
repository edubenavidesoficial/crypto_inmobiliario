import axios from "axios";
import process from "process";

export function listados(url: string, params?): Promise<any> {
    try {
        const urlActual = window.location.href;
        url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/" +
            url;
            if(params !== undefined){
                const urlParams = new URLSearchParams( params);
                url = `${url }/?${urlParams.toString()}`;
            }
        return axios
            .get(url)
            .then((response) => response.data.results)
            .catch((error) => error)
            .finally(() => {});
    } catch (error) {
        // Manejar errores aquí según sea necesario
        console.error("Error en la solicitud:", error.message);
        throw error;
    }
}

export async function listados_api(url: string, params?): Promise<any> {
    try {
        // Retrieve user data and CSRF token securely
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : {};
        const access_token = user.access_token;
        // Construct the full URL
        const urlActual = window.location.href;
        url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/" +
            url;
            if(params !== undefined){
                const urlParams = new URLSearchParams( params);
                url = `${url }/?${urlParams.toString()}`;
            }
        // Create Axios instance with default headers
        const instance = axios.create({
            baseURL: url, // Set base URL for consistency
            headers: {
                "Content-Type": "application/json", // Ensure consistent content type
                Authorization: "Bearer " + access_token,
            },
        });
        const response = await instance.get(url);
        return response.data;
    } catch (error) {
        // Manejar errores aquí según sea necesario
        console.error("Error en la solicitud:", error.message);
        throw error;
    }
}
export async function listados_amazon(url: string): Promise<any> {
    try {
        var headers = new Headers({
            Authorization: "Basic " + btoa("CEDEB388A2226C78379FB401:"),
        });
        const result = await fetch(url, { headers });
        return result;
    } catch (error) {
        // Manejar errores aquí según sea necesario
        console.error("Error en la solicitud:", error.message);
        throw error;
    }
}
export async function buscar_amazon(query: string): Promise<any> {
    const url =
        "https://api.zinc.io/v1/search?query=" +
        query +
        "&page=1&retailer=amazon";

    var headers = new Headers({
        Authorization: "Basic " + btoa("CEDEB388A2226C78379FB401:"),
    });
    const result = await fetch(url, { headers });
    return result;
}
export async function detalle_producto(product_id: string): Promise<any> {
    const url =
        "https://api.zinc.io/v1/products/" + product_id + "?retailer=amazon";

    var headers = new Headers({
        Authorization: "Basic " + btoa("CEDEB388A2226C78379FB401:"),
    });
    const result = await fetch(url, { headers });
    return result;
}
export async function guardar(url: string, model): Promise<any> {
    try {
        // Retrieve user data and CSRF token securely
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : {};
        const access_token = user.access_token;
        // Construct the full URL
        const urlActual = window.location.href;
        url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/" +
            url;

        // Create Axios instance with default headers
        const instance = axios.create({
            baseURL: url, // Set base URL for consistency
            headers: {
                "Content-Type": "application/json", // Ensure consistent content type
                Authorization: "Bearer " + access_token,
            },
        });
        // Send POST request with user data
        const response = await instance.post(url, model);
        return response.data;
    } catch (error) {
        // Handle errors appropriately, log or display messages as needed
        console.error("Error during request:", error);
        throw error; // Re-throw to allow further handling
    }
}
export async function editar(url: string, model): Promise<any> {
    try {
        // Retrieve user data and CSRF token securely
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : {};
        const access_token = user.access_token;
        // Construct the full URL
        const urlActual = window.location.href;
        url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/" +
            url;

        // Create Axios instance with default headers
        const instance = axios.create({
            baseURL: url, // Set base URL for consistency
            headers: {
                "Content-Type": "application/json", // Ensure consistent content type
                Authorization: "Bearer " + access_token,
            },
        });
        // Send POST request with user data
        const response = await instance.put(url, model);
        return response.data;
    } catch (error) {
        // Handle errors appropriately, log or display messages as needed
        console.error("Error during request:", error);
        throw error; // Re-throw to allow further handling
    }
}
export async function eliminar(url: string): Promise<any> {
    try {
        // Retrieve user data and CSRF token securely
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : {};
        const access_token = user.access_token;
        // Construct the full URL
        const urlActual = window.location.href;
        url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/" +
            url;

        // Create Axios instance with default headers
        const instance = axios.create({
            baseURL: url, // Set base URL for consistency
            headers: {
                "Content-Type": "application/json", // Ensure consistent content type
                Authorization: "Bearer " + access_token,
            },
        });
        // Send POST request with user data
        const response = await instance.delete(url);
        return response.data;
    } catch (error) {
        // Handle errors appropriately, log or display messages as needed
        console.error("Error during request:", error);
        throw error; // Re-throw to allow further handling
    }
}
export async function loginUser(user: any): Promise<any> {
    try {
        const url = new URL("/login-user", window.location.href); // Construct URL using URL constructor
        const response = await axios.post(url.toString(), user); // Use await for cleaner async/await syntax
        return response.data;
    } catch (error) {
        console.error("Error during login:", error); // Log error for debugging
        throw error; // Re-throw error for proper error handling
    }
}
export async function registroUser(user: any): Promise<any> {
    try {
        const url = new URL("/register", window.location.href); // Construct URL using URL constructor
        const response = await axios.post(url.toString(), user); // Use await for cleaner async/await syntax
        return response.data;
    } catch (error) {
        console.error("Error during login:", error); // Log error for debugging
        throw error; // Re-throw error for proper error handling
    }
}
export async function loginLaravel(user: any): Promise<any> {
    try {
        const urlActual = window.location.href;
       const  url =
            urlActual.split("/")[0] +
            "//" +
            urlActual.split("/")[2] +
            "/login";     const instance = axios.create({
            baseURL: url, // Set base URL for consistency
            headers: {
                "Content-Type": "application/json", // Ensure consistent content type
            },
        });
        // Send POST request with user data
        const response = await instance.post(url, user);
        return response.data;
    } catch (error) {
        console.error("Error during login:", error); // Log error for debugging
        throw error; // Re-throw error for proper error handling
    }
}



import ProductAmazonStore from "../store/ProductAmazonStore";
import { buscar_amazon, listados_api } from "./AxiosRepository";

export function formatear_precio(valor_precio, numeroDeCerosDecimales) {
    // Dividir el número por la potencia de 10 correspondiente al número de ceros decimales
    let parteEntera = valor_precio / 10 ** numeroDeCerosDecimales;

    // Los últimos dígitos decimales se pueden calcular multiplicando el resultado de la división por 10^n, donde n es el número de ceros decimales
    let parteDecimal = valor_precio % 10 ** numeroDeCerosDecimales;

    // Si el número tiene más dígitos decimales que los indicados, entonces los últimos dígitos decimales se deben redondear
    if (parteDecimal.toString().length > numeroDeCerosDecimales) {
        parteDecimal = Math.round(parteDecimal);
    }
    const resultado = parteEntera + "." + parteDecimal;
    return (parseFloat(resultado) * 3.85).toFixed(2);
}
export function formatear_precio_dolar(valor_precio, numeroDeCerosDecimales) {
    // Dividir el número por la potencia de 10 correspondiente al número de ceros decimales
    let parteEntera = valor_precio / 10 ** numeroDeCerosDecimales;

    // Los últimos dígitos decimales se pueden calcular multiplicando el resultado de la división por 10^n, donde n es el número de ceros decimales
    let parteDecimal = valor_precio % 10 ** numeroDeCerosDecimales;

    // Si el número tiene más dígitos decimales que los indicados, entonces los últimos dígitos decimales se deben redondear
    if (parteDecimal.toString().length > numeroDeCerosDecimales) {
        parteDecimal = Math.round(parteDecimal);
    }
    const resultado = parteEntera + "." + parteDecimal;
    return parseFloat(resultado).toFixed(2);
}
export function formatear_precio_total(valor_precio, numeroDeCerosDecimales) {
    let numero = parseFloat(valor_precio);
    let precio_total = numero;
    return Math.abs(precio_total).toFixed(numeroDeCerosDecimales);
}
export async function buscarProducto(criterio_busqueda: string) {
    const response = await buscar_amazon(criterio_busqueda);
    const data = await response.json();
    ProductAmazonStore.dispatch("setProductsAction", data.results);

    localStorage.removeItem("products");
    localStorage.setItem("products", JSON.stringify(data.results));
    location.href = "/productos-busqueda";
    document.body.classList.add("transition");
}

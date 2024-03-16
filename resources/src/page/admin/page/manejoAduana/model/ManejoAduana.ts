export class ManejoAduana {
    id: number ;
    valor_minimo: number | null;
    valor_maximo: number | null;
    precio: number | null;
    constructor() {
        this.id = 0;
        this.valor_minimo = null;
        this.valor_maximo = null;
        this.precio = null;
    }
}

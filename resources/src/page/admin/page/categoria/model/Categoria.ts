export class Categoria {
    id: number;
    name: string |null;
    image: string | null | ArrayBuffer;
    description: string | null;
    constructor() {
        this.id = 0,
        this.name = null,
        this.image = null;
        this.description = null;
    }
}

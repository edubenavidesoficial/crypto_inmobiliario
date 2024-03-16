export class ButtonCustom {
    // Atributos
    nombre: string;
    icon: string;
    accion: Function;

    // Constructor
    constructor(nombre: string, icon: string, accion: Function) {
      this.nombre = nombre;
      this.icon = icon;
      this.accion = accion;
    }
  }

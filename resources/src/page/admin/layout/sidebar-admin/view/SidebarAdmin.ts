export default {
    data() {
        return {
            menu: [
                {
                    title: "Inicio",
                    icon: "bi bi-house-fill",
                    link: "/",
                    can: true,
                },
                {
                    title: "Comprobar Pago",
                    icon: "bi bi-cash-coin",
                    link: "/comprobar-pago",
                    can: true,
                },
                {
                    title: "Categoria",
                    icon: "bi bi-bookmark-fill",
                    link: "/categoria-admin",
                    can: true,
                },
                {
                    title: "Garantia de Retorno",
                    icon: "bi bi-shield-fill-check",
                    link: "/garantia-retorno-list",
                    can: true,
                },
                {
                    title: "Manejo de aduanas",
                    icon: "bi bi-truck",
                    link: "/manejo-aduana-list",
                    can: true,
                },{
                    title: "Precio por peso",
                    icon: "bi bi-luggage-fill",
                    link: "/precio-peso-list",
                    can: true,
                },
            ],
        };
    },
    setup() {},
    async mounted() {},
    methods: {},
};

import "datatables.net-responsive-bs5";
import type { Header, Item } from "vue3-easy-data-table";
import { ButtonCustom } from "../modelComponent/ButtonCustom";

export default {
    name: "AdminTable",
    props: {
        data: {
            type: Array,
            required: true,
        },
        headers: {
            type: Array as () => Header[],
            required: true,
        },
        accion1: {
            type: ButtonCustom,
            required: false,
        },
        accion2: {
            type: ButtonCustom,
            required: false,
        },
        accion3: {
            type: ButtonCustom,
            required: false,
        },
        accion4: {
            type: ButtonCustom,
            required: false,
        },
    },
    data() {
        return {
            item: {},
        };
    },
    methods: {
        handleAcccion1(item) {
            this.item = item;
            this.accion1.accion();
        },
        handleAcccion2(item) {
            this.item = item;
            this.accion2.accion();
        },
        handleAcccion3(item) {
            this.item = item;
            this.accion3.accion();
        },
        handleAcccion4(item) {
            this.item = item;
            this.accion4.accion();
        },
    },
    watch: {
        visible(newVal) {
            this.data = newVal;
        },
    },
};

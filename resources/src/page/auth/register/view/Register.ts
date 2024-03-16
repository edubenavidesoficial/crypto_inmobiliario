import { registroUser } from "../../../../shared/AxiosRepository";

export default {
    data() {
        return {
            user: {
                name: "",
                email: "",
                password: "",
                password_confirm: "",
            },
            response: null,
        };
    },
    setup() {
        const self = this;
        async function registro() {
            await registroUser(this.user).then((response) => {
                    location.href = "/login";
                    document.body.classList.add("transition");
            });
        }
        return { registro };
    },
};

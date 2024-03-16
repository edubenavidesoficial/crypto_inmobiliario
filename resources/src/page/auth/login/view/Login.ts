import { loginLaravel, loginUser } from "../../../../shared/AxiosRepository";

export default {
    data() {
        return {
            user: {
                email: "",
                password: "",
            },
            response: null,
        };
    },
    setup() {
        const self = this;
        async function login() {
            await loginUser(this.user).then((response) => {
                localStorage.removeItem("user");
                localStorage.setItem("user", JSON.stringify(response));
                location.href = "/";
                document.body.classList.add("transition");
            });
        }
        return { login };
    },
};

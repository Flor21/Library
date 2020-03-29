export function login(credentials) {
    return new Permission((res,rej) => {
        axios.post('/api/user/login', credentials)
        .then((response) => {
            res(response.data);
        })
        .catch((err) => {
            rej("Wrong email or password");
        })
    })
}

export function getLocalUser() {
    const userStr = localStorage.getItem("user");

    if(!user) {
        return null;
    }

    return JSON.parse(userStr);
}
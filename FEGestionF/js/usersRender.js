import { apiService } from "./apiService.js";

/**
 * Renderiza los usuarios en el DOM.
 * @param {Array} users - Lista de usuarios obtenida del endpoint.
 */
const renderUsers = (users) => {
  const usersContainer = document.getElementById("users-container"); // Asegúrate de tener un contenedor en tu HTML con este ID.
  usersContainer.innerHTML = ""; // Limpiamos el contenido previo.

  users.forEach((user) => {
    const userElement = document.createElement("div");
    userElement.className = "user-item"; // Clase para estilos.
    userElement.innerHTML = `
            <p><strong>Nombre:</strong> ${user.name}</p>
            <p><strong>Email:</strong> ${user.email}</p>
            <p><strong>Código de Centro:</strong> ${user.cod_centro}</p>
        `;
    usersContainer.appendChild(userElement);
  });
};

/**
 * Obtiene y renderiza los usuarios por centro.
 */
const loadUsers = async () => {
  try {
    const users = await apiService.getUsersByCentro();
    renderUsers(users);
  } catch (error) {
    console.error("Error al cargar los usuarios:", error.message);
    alert(
      "No se pudieron cargar los usuarios. Por favor, inténtalo más tarde."
    );
  }
};

// Llamamos a la función para cargar los usuarios al iniciar la página.
document.addEventListener("DOMContentLoaded", loadUsers);

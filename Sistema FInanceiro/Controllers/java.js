document.addEventListener('DOMContentLoaded', function () {
    const itemForm = document.getElementById('itemForm');
    const itemList = document.getElementById('itemList');
    const cancelEditButton = document.getElementById('cancelEdit');
  
    let currentItemId = null;
  
    // Função para salvar o item
    itemForm.addEventListener('submit', function (e) {
      e.preventDefault();
  
      const itemName = document.getElementById('itemName').value;
      const itemDescription = document.getElementById('itemDescription').value;
      const itemValue = document.getElementById('itemValue').value;
  
      if (currentItemId === null) {
        // Novo item
        const newItem = {
          id: Date.now(), // Gerando um ID único baseado no timestamp
          name: itemName,
          description: itemDescription,
          value: itemValue
        };
        addItemToList(newItem);
      } else {
        // Editando item
        const itemToUpdate = document.getElementById(currentItemId);
        itemToUpdate.querySelector('.item-name').textContent = itemName;
        itemToUpdate.querySelector('.item-description').textContent = itemDescription;
        itemToUpdate.querySelector('.item-value').textContent = itemValue;
        cancelEdit();
      }
  
      // Limpa o formulário
      itemForm.reset();
    });
  
    // Função para adicionar um item na lista
    function addItemToList(item) {
      const row = document.createElement('tr');
      row.id = item.id;
  
      row.innerHTML = `
        <td class="item-name">${item.name}</td>
        <td class="item-description">${item.description}</td>
        <td class="item-value">${item.value}</td>
        <td>
          <button class="btn btn-warning btn-sm" onclick="editItem(${item.id})">Editar</button>
          <button class="btn btn-danger btn-sm" onclick="deleteItem(${item.id})">Excluir</button>
        </td>
      `;
  
      itemList.appendChild(row);
    }
  
    // Função para editar um item
    window.editItem = function (id) {
      const row = document.getElementById(id);
      const itemName = row.querySelector('.item-name').textContent;
      const itemDescription = row.querySelector('.item-description').textContent;
      const itemValue = row.querySelector('.item-value').textContent;
  
      document.getElementById('itemName').value = itemName;
      document.getElementById('itemDescription').value = itemDescription;
      document.getElementById('itemValue').value = itemValue;
      currentItemId = id;
    };
  
    // Função para excluir um item
    window.deleteItem = function (id) {
      const row = document.getElementById(id);
      row.remove();
    };
  
    // Função para cancelar a edição
    cancelEditButton.addEventListener('click', function () {
      cancelEdit();
    });
  
    function cancelEdit() {
      currentItemId = null;
      itemForm.reset();
    }
  });
  
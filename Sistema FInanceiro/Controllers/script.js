document.addEventListener('DOMContentLoaded', function () {
    const itemForm = document.getElementById('itemForm');
    const itemName = document.getElementById('itemName');
    const itemDescription = document.getElementById('itemDescription');
    const itemList = document.getElementById('itemList');
    const cancelUpdate = document.getElementById('cancelUpdate');
    let editMode = false;
    let currentItemID = null;
  
    // Função para carregar itens da API
    async function loadItems() {
      const response = await fetch('/api/items'); // URL da sua API
      const items = await response.json();
      itemList.innerHTML = '';
      items.forEach(item => addItemToList(item));
    }
  
    // Adiciona um item à lista na interface
    function addItemToList(item) {
      const li = document.createElement('li');
      li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
      li.innerHTML = `
        <span><strong>${item.name}</strong>: ${item.description}</span>
        <div>
          <button class="btn btn-sm btn-info edit-btn" data-id="${item.id}" data-name="${item.name}" data-description="${item.description}">Editar</button>
          <button class="btn btn-sm btn-danger delete-btn" data-id="${item.id}">Excluir</button>
        </div>
      `;
      itemList.appendChild(li);
    }
  
    // Função para criar ou atualizar um item
    async function saveItem(e) {
      e.preventDefault();
  
      const itemData = {
        name: itemName.value,
        description: itemDescription.value,
      };
  
      if (editMode) {
        await fetch(`/api/items/${currentItemID}`, {
          method: 'PUT',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(itemData),
        });
        editMode = false;
        currentItemID = null;
        cancelUpdate.style.display = 'none';
      } else {
        await fetch('/api/items', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(itemData),
        });
      }
  
      itemForm.reset();
      loadItems();
    }
  
    // Função para excluir um item
    async function deleteItem(id) {
      await fetch(`/api/items/${id}`, { method: 'DELETE' });
      loadItems();
    }
  
    // Função para editar um item
    function editItem(item) {
      itemName.value = item.name;
      itemDescription.value = item.description;
      editMode = true;
      currentItemID = item.id;
      cancelUpdate.style.display = 'inline';
    }
  
    // Event listeners
    itemForm.addEventListener('submit', saveItem);
    cancelUpdate.addEventListener('click', () => {
      editMode = false;
      currentItemID = null;
      itemForm.reset();
      cancelUpdate.style.display = 'none';
    });
  
    itemList.addEventListener('click', (e) => {
      if (e.target.classList.contains('delete-btn')) {
        const id = e.target.getAttribute('data-id');
        deleteItem(id);
      }
  
      if (e.target.classList.contains('edit-btn')) {
        const item = {
          id: e.target.getAttribute('data-id'),
          name: e.target.getAttribute('data-name'),
          description: e.target.getAttribute('data-description'),
        };
        editItem(item);
      }
    });
  
    // Carrega itens ao iniciar
    loadItems();
  });
  
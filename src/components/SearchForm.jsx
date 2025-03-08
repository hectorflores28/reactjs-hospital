export default function SearchForm({ onSearch }) {
    const [query, setQuery] = useState('');
  
    const handleSubmit = (e) => {
      e.preventDefault();
      onSearch(query);
    };
  
    return (
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={query}
          onChange={(e) => setQuery(e.target.value)}
          placeholder="Buscar..."
        />
        <button type="submit">Buscar</button>
      </form>
    );
  }
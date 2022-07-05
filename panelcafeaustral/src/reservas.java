public class reservas {
	private String nombre;
	private String email;
	private String telefono;
	private String cantidad;
	private String fecha;
	private int id;

	public reservas(String nombre, String email, String telefono, String cantidad, String fecha) {
		super();
		this.nombre = nombre;
		this.email = email;
		this.telefono = telefono;
		this.cantidad = cantidad;
		this.fecha = fecha;

	}

	public String getTelefono() {
		return telefono;
	}

	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	
	public String getFecha() {
		return fecha;
	}

	public void setFecha(String fecha) {
		this.fecha = fecha;
	}
	
	public String getCantidad() {
		return cantidad;
	}

	public void setCantidad(String cantidad) {
		this.cantidad = cantidad;
	}


}
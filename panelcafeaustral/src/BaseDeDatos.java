import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.time.*;

public class BaseDeDatos {

	public static void agregarReservaALaTabla(String nombre, String email, String telefono, String cantidad,
			String fecha) throws SQLException, ClassNotFoundException {
		try {
			// Creo la conexi�n a la base de datos dando como par�metro el String de
			// conexi�n y el Driver
			String myDriver = "org.gjt.mm.mysql.Driver";
			String myUrl = "jdbc:mysql://localhost/cafeaustral";
			Class.forName(myDriver);
			// Doy los par�metros necesarios para la conexi�n con la BD, usuario y
			// contrase�a
			Connection conn = (Connection) DriverManager.getConnection(myUrl, "root", "");
			String query = "insert into reservas (nombre, email, telefono, cantidad, fecha)"
					+ " values (?, ?, ?, ?, ?)";

			// insert mediante preparedStatement donde doy como par�metro el query y los
			// valores del objeto cliente
			PreparedStatement preparedStmt = conn.prepareStatement(query);
			preparedStmt.setString(1, nombre);
			preparedStmt.setString(2, email);
			preparedStmt.setString(3, telefono);
			preparedStmt.setString(4, cantidad);
			preparedStmt.setString(5, fecha);

			// Ejecuto el preparedStatement, de esta manera, inserto los valores a la base
			// de datos
			preparedStmt.executeUpdate();
			// cierro la conexi�n.
			conn.close();
		} catch (SQLException e) {
			// log the exception
			System.out.println("Se ha generado la siguiente excepci�n:");
			System.out.println(e.getMessage());
		}
	}

	// Realizamos update, sincronizamos valores de la tabla, con nuevos valores
	// dados como par�metro.
	public static void updateReservaPorID(int id, String nombre, String email, String telefono, String cantidad,
			String fecha) throws SQLException, ClassNotFoundException {
		try {
			// Creo la conexi�n a la base de datos dando como par�metro el String de
			// conexi�n y el Driver
			String myDriver = "org.gjt.mm.mysql.Driver";
			String myUrl = "jdbc:mysql://localhost/cafeaustral";
			Class.forName(myDriver);
			// Doy los par�metros necesarios para la conexi�n con la BD, usuario y
			// contrase�a
			Connection conn = (Connection) DriverManager.getConnection(myUrl, "root", "");
			// Query de inserci�n de datos en la tabla cliente
			String query = "UPDATE reservas SET nombre = ?, email=? , telefono = ?, cantidad = ?, fecha = ?  WHERE id = ?";
			PreparedStatement ps = conn.prepareStatement(query);
			ps.setString(1, nombre);
			ps.setString(2, email);
			ps.setString(3, telefono);
			ps.setString(4, cantidad);
			ps.setString(5, fecha);
			ps.setInt(6, id);

			ps.executeUpdate();
			ps.close();
		} catch (SQLException | ClassNotFoundException e) {
			System.out.println("Se ha generado la siguiente excepci�n:");
			System.out.println(e.getMessage());

		}
	}

	// borrar tabla contenido tabla Clientes
	public static void borrarTodosLosRegistrosDeLaTablaReservas() throws SQLException, ClassNotFoundException {
		try {
			// Creo la conexi�n a la base de datos dando como par�metro el String de
			// conexi�n y el Driver
			String myDriver = "org.gjt.mm.mysql.Driver";
			String myUrl = "jdbc:mysql://localhost/cafeaustral";
			Class.forName(myDriver);
			// Doy los par�metros necesarios para la conexi�n con la BD, usuario y
			// contrase�a
			Connection conn = DriverManager.getConnection(myUrl, "root", "");

			String sql = "DELETE FROM reservas";
			PreparedStatement prest = conn.prepareStatement(sql);
			prest.executeUpdate();
			conn.close();

		} catch (SQLException s) {
			System.out.println("No se pudo ejecutar el SQL!");
		}
	}

}

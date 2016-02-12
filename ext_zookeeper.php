<?hh

/**
 * Zookeeper class.
 */

<<__NativeData("ZendCompat")>>
class Zookeeper {
	/* if the host is provided, attempt to connect. */
	<<__Native("ZendCompat")>>
	public function __construct( mixed $host = '', mixed $watcher_cb = null, mixed $recv_timeout = 10000): void;

	<<__Native("ZendCompat")>>
	public function connect( mixed $host, mixed $watcher_cb = null, mixed $recv_timeout = 10000): mixed;

	<<__Native("ZendCompat")>>
	public function create( mixed $path, mixed $value, mixed $acl, mixed $flags = null ): mixed;

	<<__Native("ZendCompat")>>
	public function delete( mixed $path, mixed $version = -1 ): mixed;

	<<__Native("ZendCompat")>>
	public function set( mixed $path, mixed $data, mixed $version = -1, mixed &$stat = null ): mixed;

	<<__Native("ZendCompat")>>
	public function get( mixed $path, mixed $watcher_cb = null, mixed &$stat = null, mixed $max_size = 0): mixed;

	<<__Native("ZendCompat")>>
	public function getChildren( mixed $path, mixed $watcher_cb = null ): mixed;

	<<__Native("ZendCompat")>>
	public function exists( mixed $path, mixed $watcher_cb = null ): mixed;

	<<__Native("ZendCompat")>>
	public function getAcl( mixed $path ): mixed;

	<<__Native("ZendCompat")>>
	public function setAcl( mixed $path, mixed $version, mixed $acls ): mixed;

	<<__Native("ZendCompat")>>
	public function getClientId( ): mixed;

	<<__Native("ZendCompat")>>
	public function setWatcher( mixed $watcher_cb ): mixed;

	<<__Native("ZendCompat")>>
	public function getState( ): mixed;

	<<__Native("ZendCompat")>>
	public function getRecvTimeout( ): mixed;

	<<__Native("ZendCompat")>>
	public function addAuth( mixed $scheme, mixed $cert, mixed $completion_cb = null ): mixed;

	<<__Native("ZendCompat")>>
	public function isRecoverable( ): mixed;

	<<__Native("ZendCompat")>>
	public function setLogFile( mixed $file ): mixed; // TODO: might be able to set a stream like php://stderr or something

	<<__Native("ZendCompat")>>
	public function getResultMessage( ): mixed;


	// static methods

	<<__Native("ZendCompat")>>
	static public function setDebugLevel( mixed $level ): mixed;

	<<__Native("ZendCompat")>>
	static public function setDeterministicConnOrder( mixed $trueOrFalse ): mixed;

}


<?hh

/**
 * Zookeeper class.
 */

<<__NativeData("ZendCompat")>>
class Zookeeper {

	/* class constants */
	const PERM_READ   = 1;
	const PERM_WRITE  = 2;
	const PERM_CREATE = 4;
	const PERM_DELETE = 8;
	const PERM_ADMIN  = 16;
	const PERM_ALL    = 31;

	const EPHEMERAL = 1;
	const SEQUENCE  = 2;

	const EXPIRED_SESSION_STATE = -112;
	const AUTH_FAILED_STATE     = -113;
	const CONNECTING_STATE      = 1;
	const ASSOCIATING_STATE     = 2;
	const CONNECTED_STATE       = 3;
	const NOTCONNECTED_STATE    = 999;

	const CREATED_EVENT         = 1;
	const DELETED_EVENT         = 2;
	const CHANGED_EVENT         = 3;
	const CHILD_EVENT           = 4;
	const SESSION_EVENT         = -1;
	const NOTWATCHING_EVENT     = -2;

	const LOG_LEVEL_ERROR = 1;
	const LOG_LEVEL_WARN  = 2;
	const LOG_LEVEL_INFO  = 3;
	const LOG_LEVEL_DEBUG = 4;

	const SYSTEMERROR          = -1;
	const RUNTIMEINCONSISTENCY = -2;
	const DATAINCONSISTENCY    = -3;
	const CONNECTIONLOSS       = -4;
	const MARSHALLINGERROR     = -5;
	const UNIMPLEMENTED        = -6;
	const OPERATIONTIMEOUT     = -7;
	const BADARGUMENTS         = -8;
	const INVALIDSTATE         = -9;

	const OK         = 0;
	const APIERROR   = -100;
	const NONODE     = -101;
	const NOAUTH     = -102;
	const BADVERSION = -103;
	const NOCHILDRENFOREPHEMERALS = -108;
	const NODEEXISTS = -110;
	const NOTEMPTY   = -111;
	const SESSIONEXPIRED  = -112;
	const INVALIDCALLBACK = -113;
	const INVALIDACL      = -114;
	const AUTHFAILED      = -115;
	const CLOSING         = -116;
	const NOTHING         = -117;
	const SESSIONMOVED    = -118;


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


<?php
App::uses('Folder', 'Utility');
class Download extends AppModel {

	var $useTable = false;

	/* relative path to files */
	var $path = 'files';

	function read($path = null) {
		$data = null;

		$wwwPath = join('/', explode(DS, $path));

		$Folder = new Folder(WWW_ROOT . $this->path . DS . $path);
		list($dirs, $files) = $Folder->read(true, array('.', '..', '.svn'));

		$dir = $file = array();

		$count = count($dirs);
		for ($i = 0; $i < $count; $i++) {
			$dir[$i]['name'] = $dirs[$i];
			$dir[$i]['path'] = '/' . $wwwPath . '/' . $dirs[$i];
			$dir[$i]['md5'] = null;
			$dir[$i]['size'] = $this->__size($Folder->pwd() . DS . $dirs[$i]);
			$dir[$i]['icon'] = '/icons/dir.gif';

		}

		$count = count($files);
		for ($i = 0; $i < $count; $i++) {
			$file[$i]['name'] = $files[$i];
			$file[$i]['size'] = $this->__size($Folder->pwd() . DS . $files[$i]);
			$file[$i]['icon'] = $this->__icon($files[$i]);
			$file[$i]['path'] = '/' . $this->path . '/' . $wwwPath . '/' . $files[$i];
			$file[$i]['md5'] = md5($Folder->pwd() . $files[$i]);
		}

		return array('Folder' => $dir, 'File' => $file);
	}

	function __size($file = '', $ext = 'Byte', $size = '0') {
		$size_ext = array('','K','M','G','T');
		
		if (!file_exists($file)) {
			return 0;
		}

		$size = filesize($file);

		if ($size > 0) {
			$div = 0;
			while ($size >= pow(1024,$div)) $div++;
			return array('num' => number_format(($size/pow(1024, $div-1)), 1, ". ", ".") , 'ext' => $size_ext[$div-1] . $ext);
		} else {
			return array('num' => 0,'ext' => '');
		}
	}


	function __icon($file) {
		$array = explode('.', $file);
		$ext = '';
		$partCount = count($array);

		if ($partCount == 1) {
			$ext = '^^BLANKICON^^';
		} else {
			$ext = array_pop($array);
		}

		$exts = array("bin" => "/icons/binary.gif",
					"hqx" => "/icons/binhex.gif",
					"tar" => "/icons/tar.gif",
					"wrl" => "/icons/world2.gif",
					"Z" => "/icons/compressed.gif",
					"gz" => "/icons/compressed.gif",
					"zip" => "/icons/compressed.gif",
					"bz2" => "/icons/compressed.gif",
					"rar" => "/icons/compressed.gif",
					"ace" => "/icons/compressed.gif",
					"ps" => "/icons/ps.gif",
					"pdf" => "/icons/ps.gif",
					"html" => "/icons/layout.gif",
					"txt" => "/icons/text.gif",
					"c" => "/icons/c.gif",
					"cpp" => "/icons/small/c.gif",
					"pl" => "/icons/p.gif",
					"php" => "/icons/p.gif",
					"php3" => "/icons/p.gif",
					"php4" => "/icons/p.gif",
					"php5" => "/icons/p.gif",
					"for" => "/icons/f.gif",
					"dvi" => "/icons/dvi.gif",
					"uu" => "/icons/uuencoded.gif",
					"conf" => "/icons/script.gif",
					"tex" => "/icons/tex.gif",
					"core" => "/icons/bomb.gif",
					"^^BLANKICON^^" => "/icons/blank.gif",
					"^^UNKOWN^^" => "/icons/unknown.gif");

		if (isset($exts[$ext])) {
			return $exts[ $ext ];
		} else {
			return $exts['^^UNKOWN^^'];
		}
	}
}
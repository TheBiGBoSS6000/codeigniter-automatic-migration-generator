# Create a Migration File from current DB



When all goes well it will create a file in migrations directory like 20201005113401_create_blog.php


# Supports
1: Type (include ENUM with value)
2: Collation
3: Attributes
3: Null
4: Default
5: AUTO_INCREMENT
5: Indexes => PRI , UNI , MUL

# How To use:

1: Enable migrations and set version to 0;
2: Set migration type as timestamp;
3: Enable to write migration folder;
3: Copy AliRK_Migration.php to your library folder (/application/library);
4: In controller:


	public function generate($table = FALSE) {
		$this->load->library('AMG_Migration');
		if ($table) {
			$this->amg_migration->generate($table);
		}
		else {
			$this->amg_migration->generate();
		}
	}
    

 * @package        PatchTester
 * @copyright      Copyright (C) 2011 Ian MacLennan, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 * @package        PatchTester
		foreach ($lines AS $line)
		{
					if (strpos($line, 'diff --git') === 0)
					{
					if (strpos($line, 'index') === 0)
					{
					if (strpos($line, '---') === 0)
					{
					if (strpos($line, '+++') === 0)
					{
					if (strpos($line, 'new file mode') === 0)
					{
					if (strpos($line, 'deleted file mode') === 0)
					{
					if (strpos($line, '@@') === 0)
					{
		//@todo Use the JCurl class
		require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/curl.php';
		if (is_null($pull->head->repo))
		{
		$patch = PTCurl::getAdapter($pull->diff_url)
			->fetch()->body;
		foreach ($files as $file)
		{
			if ($file->action == 'deleted' && !file_exists(JPATH_ROOT . '/' . $file->old))
			{
			if ($file->action == 'added' || $file->action == 'modified')
			{
				if (file_exists(JPATH_COMPONENT . '/backups/' . md5($file->new) . '.txt'))
				{
				if ($file->action == 'modified' && !file_exists(JPATH_ROOT . '/' . $file->old))
				{
				$file->body = PTCurl::getAdapter($url)
					->fetch()->body;
		foreach ($files as $file)
			if ($file->action == 'deleted' || (file_exists(JPATH_ROOT . '/' . $file->new) && $file->action == 'modified'))
			{
				if (!JFile::copy(JPath::clean(JPATH_ROOT . '/' . $file->old), JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'))
				{
						, JPATH_ROOT . '/' . $file->old, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'));
					if (!JFile::write(JPath::clean(JPATH_ROOT . '/' . $file->new), $file->body))
					{
					if (!JFile::delete(JPATH::clean(JPATH_ROOT . '/' . $file->old)))
					{
		if (!$table->store())
		{

		if ($table->applied_version != $version->getShortVersion())
		{
			/*
			*/
			$table->delete();
		if (!$files)
		{
			throw new Exception(sprintf('%s - Error retrieving table data (%s)'
				, __METHOD__, htmlentities($table->data)));
		}

		foreach ($files as $file)
		{
			switch ($file->action)
			{
					if (!JFile::copy(
						JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'
						, JPATH_ROOT . '/' . $file->old)
					)
					{
							, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'
							, JPATH_ROOT . '/' . $file->old));

					if (!JFile::delete(JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'))
					{
							, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'));
					if (!JFile::delete(JPath::clean(JPATH_ROOT . '/' . $file->new)))
					{
		/*
		*/
		$table->delete();
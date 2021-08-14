<?php
/** \file
 *  \brief Classe model for users table.
 *
 *  This is a sample class for users table. You can delete it from your project and write your own.
 *
 *  \ingroup  models
 *  \author   Fernando Val - fernando.val@gmail.com
 */
use Springy\Model;

class UsuariosModel extends Model
{
    protected $tableName = 'test';
    protected $writableColumns = ['id', 'name'];
    protected $insertDateColumn = 'created_at';
    protected $updateDateColumn = 'updated_at';
    protected $deletedColumn = 'deleted';
}
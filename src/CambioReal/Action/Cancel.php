<?php namespace CambioReal\Action;

/**
 * The cancel action class
 *
 * @author Deivide Vian <dvdvian@gmail.com>
 */
class Cancel extends \CambioReal\Action\AbstractAction {

    /**
     * The HTTP method
     * @var string
     */
    protected $method = 'POST';

    /**
     * The action URL address
     * @var string
     */
    protected $action = 'cancel';

    /**
     * Validates the request parameters
     * @param CambioReal\Action\Validator $validator The validator instance
     * @return mixed
     * @throws InvalidArgumentException
     */
    protected function validate($validator)
    {
        $validator->required('token');
    }

}

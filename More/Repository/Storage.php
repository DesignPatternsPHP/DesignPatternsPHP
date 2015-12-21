<?php

namespace DesignPatterns\More\Repository;

/**
 * Interface Storage.
 *
 * This interface describes methods for accessing storage.
 * Concrete realization could be whatever we want - in memory, relational database, NoSQL database and etc
 */
interface Storage
{
    /**
     * Method to persist data
     * Returns new id for just persisted data.
     *
     * @param array() $data
     *
     * @return int
     */
    public function persist($data);

    /**
     * Returns data by specified id.
     * If there is no such data null is returned.
     *
     * @param int $id
     *
     * @return array|null
     */
    public function retrieve($id);

    /**
     * Delete data specified by id
     * If there is no such data - false returns, if data has been successfully deleted - true returns.
     *
     * @param int $id
     *
     * @return bool
     */
    public function delete($id);
}

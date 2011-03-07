<?
class RequestHistory extends RequestHistoryBase
{
  function unserialize()
  {
    $this->get_vars = __unserialize($this->get_vars);
    $this->post_vars = __unserialize($this->post_vars);
  }
  
  function serialize()
  {
    $this->get_vars = __serialize($this->get_vars);
    $this->post_vars = __serialize($this->post_vars);
  }
}
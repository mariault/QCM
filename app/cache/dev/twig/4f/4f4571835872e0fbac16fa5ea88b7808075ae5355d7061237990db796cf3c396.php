<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ccac6b9b1e39fd2122d3148f18705430bfdc708a04c4adc1c9cb36a196e76584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4347926ffaa4ecb13474324dd23de727e442ce4803709120c2e966086e7d383 = $this->env->getExtension("native_profiler");
        $__internal_f4347926ffaa4ecb13474324dd23de727e442ce4803709120c2e966086e7d383->enter($__internal_f4347926ffaa4ecb13474324dd23de727e442ce4803709120c2e966086e7d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4347926ffaa4ecb13474324dd23de727e442ce4803709120c2e966086e7d383->leave($__internal_f4347926ffaa4ecb13474324dd23de727e442ce4803709120c2e966086e7d383_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82202f79cb2241ec4f1aa14db9f79b0e5dcde47d4a5e537309064e01f3102fa5 = $this->env->getExtension("native_profiler");
        $__internal_82202f79cb2241ec4f1aa14db9f79b0e5dcde47d4a5e537309064e01f3102fa5->enter($__internal_82202f79cb2241ec4f1aa14db9f79b0e5dcde47d4a5e537309064e01f3102fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_82202f79cb2241ec4f1aa14db9f79b0e5dcde47d4a5e537309064e01f3102fa5->leave($__internal_82202f79cb2241ec4f1aa14db9f79b0e5dcde47d4a5e537309064e01f3102fa5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

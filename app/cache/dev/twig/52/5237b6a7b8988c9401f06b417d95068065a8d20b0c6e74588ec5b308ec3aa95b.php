<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1df4c9409e63decc52e1ea434928b5dc8f5d32777f09e5fec9aa73c712c8ac74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_047e65ae71efdee77dca18e5bc4f43a4cf8e3f430c55501875f10043ce73feed = $this->env->getExtension("native_profiler");
        $__internal_047e65ae71efdee77dca18e5bc4f43a4cf8e3f430c55501875f10043ce73feed->enter($__internal_047e65ae71efdee77dca18e5bc4f43a4cf8e3f430c55501875f10043ce73feed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047e65ae71efdee77dca18e5bc4f43a4cf8e3f430c55501875f10043ce73feed->leave($__internal_047e65ae71efdee77dca18e5bc4f43a4cf8e3f430c55501875f10043ce73feed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67f6e23f317f94be371144ecd9b0efb9e604c396009f6714f1a5da6691d023c6 = $this->env->getExtension("native_profiler");
        $__internal_67f6e23f317f94be371144ecd9b0efb9e604c396009f6714f1a5da6691d023c6->enter($__internal_67f6e23f317f94be371144ecd9b0efb9e604c396009f6714f1a5da6691d023c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_67f6e23f317f94be371144ecd9b0efb9e604c396009f6714f1a5da6691d023c6->leave($__internal_67f6e23f317f94be371144ecd9b0efb9e604c396009f6714f1a5da6691d023c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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

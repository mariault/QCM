<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b63dfe4552385fd6682bfa6f155e177835e466ec7523af5784191cbf616cb428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_29b4567e9a74da9a12a074c67d52b311006f39e08c966c0dbb950a30703638c7 = $this->env->getExtension("native_profiler");
        $__internal_29b4567e9a74da9a12a074c67d52b311006f39e08c966c0dbb950a30703638c7->enter($__internal_29b4567e9a74da9a12a074c67d52b311006f39e08c966c0dbb950a30703638c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b4567e9a74da9a12a074c67d52b311006f39e08c966c0dbb950a30703638c7->leave($__internal_29b4567e9a74da9a12a074c67d52b311006f39e08c966c0dbb950a30703638c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b41720971137042be451e14c9ed9cb331f892bf970e426b1e924085fb0e50cc = $this->env->getExtension("native_profiler");
        $__internal_0b41720971137042be451e14c9ed9cb331f892bf970e426b1e924085fb0e50cc->enter($__internal_0b41720971137042be451e14c9ed9cb331f892bf970e426b1e924085fb0e50cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0b41720971137042be451e14c9ed9cb331f892bf970e426b1e924085fb0e50cc->leave($__internal_0b41720971137042be451e14c9ed9cb331f892bf970e426b1e924085fb0e50cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

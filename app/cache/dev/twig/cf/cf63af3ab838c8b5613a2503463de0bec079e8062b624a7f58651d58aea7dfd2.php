<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_8bf2624764e6436ff91263dbfcbe39cd6f5b2c084329ebf93c4391b10b6fc007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_baa3b3e724df9683f6103251810ba0b1536313d77b8760ac370bb4b555b08f34 = $this->env->getExtension("native_profiler");
        $__internal_baa3b3e724df9683f6103251810ba0b1536313d77b8760ac370bb4b555b08f34->enter($__internal_baa3b3e724df9683f6103251810ba0b1536313d77b8760ac370bb4b555b08f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa3b3e724df9683f6103251810ba0b1536313d77b8760ac370bb4b555b08f34->leave($__internal_baa3b3e724df9683f6103251810ba0b1536313d77b8760ac370bb4b555b08f34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fdd68c0ecc82309850c92c0d1ac0f95ccc9a3611146deec50f7ac1fa818e5d4 = $this->env->getExtension("native_profiler");
        $__internal_9fdd68c0ecc82309850c92c0d1ac0f95ccc9a3611146deec50f7ac1fa818e5d4->enter($__internal_9fdd68c0ecc82309850c92c0d1ac0f95ccc9a3611146deec50f7ac1fa818e5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9fdd68c0ecc82309850c92c0d1ac0f95ccc9a3611146deec50f7ac1fa818e5d4->leave($__internal_9fdd68c0ecc82309850c92c0d1ac0f95ccc9a3611146deec50f7ac1fa818e5d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

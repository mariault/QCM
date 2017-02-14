<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_093603a89f4f711e2a32923b43d6fc3dd94abd739b1fc5c424112fc7e6fbfd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d01bed26420b6ecfd0bf911f2ae88dd9988d0c90670ddd051c98562af25823dd = $this->env->getExtension("native_profiler");
        $__internal_d01bed26420b6ecfd0bf911f2ae88dd9988d0c90670ddd051c98562af25823dd->enter($__internal_d01bed26420b6ecfd0bf911f2ae88dd9988d0c90670ddd051c98562af25823dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01bed26420b6ecfd0bf911f2ae88dd9988d0c90670ddd051c98562af25823dd->leave($__internal_d01bed26420b6ecfd0bf911f2ae88dd9988d0c90670ddd051c98562af25823dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_346a19d7f7741ba0af1c080a3b40730a73d9369569790837985e3d5d80ef3b7e = $this->env->getExtension("native_profiler");
        $__internal_346a19d7f7741ba0af1c080a3b40730a73d9369569790837985e3d5d80ef3b7e->enter($__internal_346a19d7f7741ba0af1c080a3b40730a73d9369569790837985e3d5d80ef3b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_346a19d7f7741ba0af1c080a3b40730a73d9369569790837985e3d5d80ef3b7e->leave($__internal_346a19d7f7741ba0af1c080a3b40730a73d9369569790837985e3d5d80ef3b7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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

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
        $__internal_897edb3eb66f7475db7efd5ae073e7aaba37cae448ca15dca7f063fc827203ab = $this->env->getExtension("native_profiler");
        $__internal_897edb3eb66f7475db7efd5ae073e7aaba37cae448ca15dca7f063fc827203ab->enter($__internal_897edb3eb66f7475db7efd5ae073e7aaba37cae448ca15dca7f063fc827203ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897edb3eb66f7475db7efd5ae073e7aaba37cae448ca15dca7f063fc827203ab->leave($__internal_897edb3eb66f7475db7efd5ae073e7aaba37cae448ca15dca7f063fc827203ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5a2c73097e2dd79c8ebd02c7ec4e1997cbd5f1c24cc5806a09f6f6bf509179d = $this->env->getExtension("native_profiler");
        $__internal_d5a2c73097e2dd79c8ebd02c7ec4e1997cbd5f1c24cc5806a09f6f6bf509179d->enter($__internal_d5a2c73097e2dd79c8ebd02c7ec4e1997cbd5f1c24cc5806a09f6f6bf509179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d5a2c73097e2dd79c8ebd02c7ec4e1997cbd5f1c24cc5806a09f6f6bf509179d->leave($__internal_d5a2c73097e2dd79c8ebd02c7ec4e1997cbd5f1c24cc5806a09f6f6bf509179d_prof);

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

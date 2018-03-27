<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3601e6dea90828858d94a1fe3b0ea8cc7c67a0b9392a86952e130c91dc28e0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2a2869dce9039480b533a82757fe1a8788d3d6d2e85dfff9a63d33451cf26b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2869dce9039480b533a82757fe1a8788d3d6d2e85dfff9a63d33451cf26b4b->enter($__internal_2a2869dce9039480b533a82757fe1a8788d3d6d2e85dfff9a63d33451cf26b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_acd8edecfc3bd22e275203805dfb8e664d5d34de2498eb6163bdc131b2a0667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd8edecfc3bd22e275203805dfb8e664d5d34de2498eb6163bdc131b2a0667d->enter($__internal_acd8edecfc3bd22e275203805dfb8e664d5d34de2498eb6163bdc131b2a0667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a2869dce9039480b533a82757fe1a8788d3d6d2e85dfff9a63d33451cf26b4b->leave($__internal_2a2869dce9039480b533a82757fe1a8788d3d6d2e85dfff9a63d33451cf26b4b_prof);

        
        $__internal_acd8edecfc3bd22e275203805dfb8e664d5d34de2498eb6163bdc131b2a0667d->leave($__internal_acd8edecfc3bd22e275203805dfb8e664d5d34de2498eb6163bdc131b2a0667d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_566b230f23ce34cfdd29641a6e946f60ed730d767581270d0e5bf18971d32fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566b230f23ce34cfdd29641a6e946f60ed730d767581270d0e5bf18971d32fbc->enter($__internal_566b230f23ce34cfdd29641a6e946f60ed730d767581270d0e5bf18971d32fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3546c992789f03a8fddcbb3aed8c319fb92a370bb1b2378fb6de59ae8c6dad60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3546c992789f03a8fddcbb3aed8c319fb92a370bb1b2378fb6de59ae8c6dad60->enter($__internal_3546c992789f03a8fddcbb3aed8c319fb92a370bb1b2378fb6de59ae8c6dad60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3546c992789f03a8fddcbb3aed8c319fb92a370bb1b2378fb6de59ae8c6dad60->leave($__internal_3546c992789f03a8fddcbb3aed8c319fb92a370bb1b2378fb6de59ae8c6dad60_prof);

        
        $__internal_566b230f23ce34cfdd29641a6e946f60ed730d767581270d0e5bf18971d32fbc->leave($__internal_566b230f23ce34cfdd29641a6e946f60ed730d767581270d0e5bf18971d32fbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
